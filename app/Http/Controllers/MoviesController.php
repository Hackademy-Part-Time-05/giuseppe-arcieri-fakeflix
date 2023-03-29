<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    private static $array =
    [
        [    
            'id'=>1,
            'name'=>'Dahmer',
            'img'=>'/img/esercizio/dahmer.jpg',
            'type'=>'movie'
        ],
        [
            'id'=>2,
            'name'=>'Interstellar',
            'img'=>'/img/esercizio/interstellar.jpg',
            'type'=>'movie'
        ],
        [
            'id'=>3,
            'name'=>'The Lord of The Rings',
            'img'=>'/img/esercizio/lotr.jpg',
            'type'=>'movie'
        ],
        [
            'id'=>4,
            'name'=>'Matrix',
            'img'=>'/img/esercizio/matrix.jpg',
            'type'=>'movie'
        ],
        [
            'id'=>5,
            'name'=>'Il Padrino',
            'img'=>'/img/esercizio/padrino.jpg',
            'type'=>'movie'
        ],
        [
            'id'=>6,
            'name'=>'Pulp Fiction',
            'img'=>'/img/esercizio/pulp.jpg',
            'type'=>'movie'
        ],
        [
            'id'=>7,
            'name'=>'Breaking Bad',
            'img'=>'/img/cover/breaking-bad.jpg',
            'type'=>'serie'
        ],
        [
            'id'=>8,
            'name'=>'Don Matteo',
            'img'=>'/img/cover/don-matteo.jpg',
            'type'=>'serie'
        ],
        [
            'id'=>9,
            'name'=>'Friends',
            'img'=>'/img/cover/friends.jpg',
            'type'=>'serie'
        ]
    ];
    

public function filter($type){
    $array=[];
    foreach(self::$array as $item){
        if($item['type']==$type){
            $array[]=$item;
        }
    }
        return $array;
}

public function series(){
    return view('series',['array'=>self::filter('serie')]);
}

public function catalogue(){
    return view('catalogue',['array'=>self::filter('movie')]);
}

public function welcome(){
    return view('welcome');
}
public function detail($id){
    foreach (self::$array as $item)
    if ($item['id'] == $id){
        return view('detail',['item'=>$item]);
    } 
}
};