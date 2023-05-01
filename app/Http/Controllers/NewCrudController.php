<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;

class NewCrudController extends Controller
{

    public function store(Request $request){
        
        $elements = json_decode($request->elements);
        $data = [];
        foreach($elements as $elm){
            $data[$elm->name] = $elm->validation;
        }

        /* Validation */
        $is = $request->validate($data);

        /* If Validated */
        $input = $request->all();

        if(!isset($input['id'])){
            $input["id"] = 0;
        }

        if(isset($input["password"])){
            $input["password"] = bcrypt($input["password"]);
        }
        if(!isset($input["user_id"])){
            $input["user_id"] = Auth::id();
        }

        /* File upload and delete */
        foreach($input as $k=>$v){
            if(gettype($v) == 'object'){
                if($file = $request->file($k)){
                    $name = time().'_'.mt_rand(100000,999999).'_'.$file->getClientOriginalName();
                    $file->move($input["model"], $name);
                    $input[$k] = "/".$input["model"]."/".$name;
                    if($input['id'] != 0){
                        $model_name = '\\App\\Models\\'.$request->model;
                        $model = new $model_name;
                        $fl = $model->find($input["id"])[$k];
                        if($fl != null || $fl != ""){
                            if(file_exists(substr($fl, 1))){
                                unlink(substr($fl, 1));
                            }
                        }
                    }
                }
            }
        }

        if($input['id'] == 0){
            $model_name = '\\App\\Models\\'.$request->model;
            $model = new $model_name;
            $crud = $model->create($input);
            return $crud;
        } else {
            $model_name = '\\App\\Models\\'.$request->model;
            $model = new $model_name;
            $crud = $model->find($input["id"])->update($input);
            return $crud;
        }

        return $request;
    }

    public function delete(Request $request){

        $input = $request->all();

        foreach($input['files'] as $file){
            $model_name = '\\App\\Models\\'.$request->model;
            $model = new $model_name;
            $fl = $model->find($request->id)[$file];

            if($fl != null || $fl != ""){
                if(file_exists(substr($fl, 1))){
                    unlink(substr($fl, 1));
                }
            }
        }

        $model_name = '\\App\\Models\\'.$request->model;
        $model = new $model_name;

        $model->find($request->id)->delete();
        return response()->json("ok", Response::HTTP_OK);
    }

    public function fetch(Request $request){
        $model_name = '\\App\\Models\\'.$request->model;
        $model = new $model_name;
        if($request->link == null){
            return $model->get([$request->value . ' as value', $request->text . ' as text']);
        } else {
            return $model->where($request->link, $request->link_value)->get([$request->value . ' as value', $request->text . ' as text']);
        }
        
    }
    
    public function grid(Request $request){

        $model_name = '\\App\\Models\\'.$request->model;
        $model = new $model_name;
        $query = $model::query();

        /* With Integration */
        if(sizeof($request->with) > 0){
            foreach($request->with as $w){
                $ws = explode(".",$w);
                $size = sizeof($ws);
                if($size > 1){

                    $query = $query->with($ws[0], function($q) use($size, $ws){
                        $this->loopWith($q, $size, $ws, 1);
                    });

                } else {
                    $query = $query->with($ws[0]);
                }
            }
        }

        /* Where Integration */
        if(sizeof($request->where) > 0){
            foreach($request->where as $where){
                if(sizeof($where) == 2){
                    $query = $query->where($where[0], $where[1]);
                }
                if(sizeof($where) == 3){
                    $query = $query->where($where[0], $where[1], $where[2]);
                }
            }
        }

        /* WhereIn Integration */
        if(sizeof($request->where_in) > 0){
            $query = $query->whereIn($request->where_in[0], $request->where_in[1]);
        }

        /* Filter */
        if($request->search != '' && $request->column != ''){
            
            $cols = explode(".",$request->column);
            if(sizeof($cols) > 1){
                $query = $query->whereHas($cols[0], function($q) use($cols, $request){
                    $this->loopWhereHas($q, $cols, 1, $request);
                });
            } else {
                $query = $query->where($request->column, $request->search);
            }
        }

        $query = $query->orderBy('id', 'desc')->paginate($request->rows)->jsonSerialize();

        return response($query, Response::HTTP_OK);

    }

    protected function loopWith($q, $size, $ws, $n){
        if($size > $n){
            $q->with($ws[$n], function($qq) use($size, $ws, $n){
                $this->loopWith($qq, $size, $ws, $n+1);
            });
        }
    }

    protected function loopWhereHas($q, $cols, $num, $req){
        $size = sizeof($cols);
        if(($size-1) == $num){
            
            switch($req->match){
                case "Exact":
                $q->where($cols[$num], $req->search);
                break;

                case "Anywhere":
                $q->where($cols[$num], "LIKE", "%".$req->search."%");
                break;

                case "Start":
                $q->where($cols[$num], "LIKE", "%".$req->search);
                break;
            }

            
        }
        if(($size-1) > $num){
            $q->whereHas($cols[$num], function($qq) use($cols, $num, $req){
                $this->loopWhereHas($qq, $cols, $num+1, $req);
            });
        }
    }

}
