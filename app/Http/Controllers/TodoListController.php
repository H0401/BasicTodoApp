<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    public function index(){
        return view("index");
    }
    public function todos(){
        return view("todos", ["allTodos" => ListItem::all()]);
    }
    public function updateTodo(){
        $id = request()->id;
        if($id){
            $todo = ListItem::findOrFail($id);
            if($todo){
                $todo->isComplete = 1;
                $todo->save();
            }
        }
        return redirect("todos");
    }
    public function deleteTodo(){
        $id = request()->id;
        if($id){
            $todo = ListItem::findOrFail($id);
            if($todo){
                $todo->delete();
            }
        }
        return redirect("todos");
    }
    // Metoda která se zavolá v web.php když se udělá post request na save-item uri
    public function saveItem(Request $request){
        // Metoda která hodí data z requestu do logu (/storage/logs/laravel.log);
        Log::info(json_encode($request->all()));
        $newListItem = new ListItem();
        $newListItem->name = $request->Todo;
        $newListItem->isComplete = 0;
        $newListItem->save();
        return redirect("/");
    }

}
