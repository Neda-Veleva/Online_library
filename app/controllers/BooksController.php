<?php

class BooksController extends BaseController {

	/**
	 * Display a listing of books
	 *
	 * @return Response
	 */
	public function index()
	{
            $books = Book::orderBy('created_at', 'DESC')->paginate(8);
            return View::make('books.index')->with('books', $books);
	}

	/**
	 * Show the form for creating a new book
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('books.create');
	}

	/**
	 * Store a newly created book in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $input = Input::all();
            $validator = Validator::make($input, Book::$rules, Book::$errors_message);
            $message = 'Incorrect data!';
            if ($validator->fails())
            {
                return Redirect::back()->withErrors($validator)->withInput()->with('message', $message);
            }

            $file = Input::file('cover');
            $destinationPath = 'public/media/covers';
            $filename = $file->getClientOriginalName();
            $upload_success = Input::file('cover')->move($destinationPath, $filename);
            if($upload_success) { 
                
                $book = new Book();
                $book->createBook($input, $filename);
                
                return Redirect::to('/books')->with('message', 'The record is successful!');
            } else {
                return Redirect::back()->withInput()->with('message', $message);
            }
                
	}
        
        /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{           
            $book = Book::find($id);            
            return View::make('books.show')->with('book', $book);
	}

	
}
