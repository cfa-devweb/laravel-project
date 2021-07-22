<?php 
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class ListingPostController extends Controller
{
    public function listingPost() {
        $Posts = Post::all();

        return view('listingPosts', compact('Posts'));

    }

    // Function to insert a Offer Job in the database
    public function addoffer(Request $request)
    { 
        $request->validate([
            'entitled'=> 'required',
            'company' => 'required|max:60',
            'contact' => 'required|max:55',
            'content' => 'required|max:500'
        ]);

        Post::create([
            'name'=> $request->input('entitled'),
            'name_company' => $request->input('company'),
            'contact' => $request->input('contact'),
            'content' => $request->input('content'),
        ]);
        
        
        return back();

        // return redirect('/listingPost');

    }

    // Function to delete one post
    public function deletePost($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/listingPosts')->with('success', 'Offre supprimer avec succéss');
    }

    // Fuction to update one post;
    public function updatePost($id) {
        $post = Post::findOrFail($id);
        return view('/listingPosts', compact('Posts'));
    }

}
