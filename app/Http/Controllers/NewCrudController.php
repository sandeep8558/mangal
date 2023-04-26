<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewCrudController extends Controller
{
    
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
