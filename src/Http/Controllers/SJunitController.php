<?php 
namespace ShineYork\SJunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;

class SJunitController extends Controller{

        public function index(){
                 return view('junit::index');
        }

        public function store(){
              $namespace = $request->input('namespace');
              $className = $request->input('className');
              $action = $request->input("action");
              $param = $request->input("param");
              $class= () ? $namespce :$namespace.'\\'.$className;
              $class = str_replace('/',"\\",$class);
              $object = new $class();
              $param = ( $param == "" ) ? [] : explode( '|' , $param);
              $data = call_user_func_array( [$object, $action] , $param);
              return ( is_array( $data )) ? json_encode( $data ) : dd( $data );
        
        }


}
