<?php

class Book extends Eloquent {

	public static $rules = array(
            'title' => 'required',
            'author' => 'required',
            'page_count' => 'required',
            'isbn' => 'required',
            'publish_date' => 'required',
            'format' => 'required',
            'resume' => 'required',
            'cover' => 'required|mimes:jpeg,png|max:1000',
	);

	protected $fillable = [];
        
        public static  $errors_message = array(
            'title.required' => 'The Book Title is required!',            
            'author.required' => 'The Author is required!',
            'page_count.required' => 'The Page Count is required!',
            'isbn.required' => 'The ISBN is required!', 
            'publish_date.required' => 'The Publish Date is required!',
            'resume.required' => 'The Resume is required!',
            'cover.required' => 'The Image file is required!', 
            'cover.mimes' => 'Please, upload jpeg or png file!',
            'cover.max' => 'The image may not be greater than 50 000 kilobytes!',
        );
        
        public function createBook($input, $filename) {
            $book = new Book();
            $book->title = Input::get('title');
            $book->author = Input::get('author');
            $book->page_count = Input::get('page_count');
            $book->isbn = Input::get('isbn');
            $book->publish_date = Input::get('publish_date');
            $book->format = Input::get('format');
            $book->resume = Input::get('resume');
            $book->cover = 'media/covers/' . $filename ;
            $book->save();
        }
}
