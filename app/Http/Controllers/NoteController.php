<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;


    class NoteController extends Controller
{
    public function showAllNotes() {
        
        $notes = Note::orderBy('updated_at','desc')->get();
        return view ('notes', ['notes' => $notes]);
    }

    public function createNote() {

        return view ('create-note');
    }

    public function storeNote(Request $request) {
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:5000'
            
        ]);

        $note = new Note();
        $note->title = $validated['title'];
        $note->desc = $validated['desc'];
        
        $note->save();

        return redirect()->route('showAllNotes')->with('success', 'Notes created successfully');
    }

    public function viewNote(Request $request) {
        $note = Note::find($request->id);

        return view ('note',['note'=>$note]);
    } 
    public function editNote(Request $request) {
        $note = Note::find($request->id);

        return view ('edit-note',['note'=>$note]);
    } 
    public function updateNote(Request $request) {
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:5000'
            
        ]);

        $note = Note::find($request->id);
        $note->title = $validated['title'];
        $note->desc = $validated['desc'];
        
        $note->save();

        return redirect()->route('viewNote',['id'=>$note->id])->with('success', 'Notes created successfully');
    }
    public function deleteNote(Request $request){
        $note = Note::find($request->id);

        if($note){
            $note->delete();
        }

        return redirect()->route('showAllNotes')->with('Success','Delete Successfully');
    }
}

