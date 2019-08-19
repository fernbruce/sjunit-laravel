<?php 
namespace ShineYork\SJunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class SJunitServiceProvider extends ServiceProvider{
        
        public function register(){
              echo '这是sjunit服务update';
        }
        
        public function boot(){


        }

}

