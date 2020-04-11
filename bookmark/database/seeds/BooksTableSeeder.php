<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //added here
        # Add a individual book
    $book = new Book();
    $book->slug = 'the-martian';
    $book->title = 'The Martian';
    $book->author = 'Anthony Weir';
    $book->published_year = 2011;
    $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/the-martian.jpg';
    $book->info_url = 'https://en.wikipedia.org/wiki/The_Martian_(Weir_novel)';
    $book->purchase_url = 'https://www.barnesandnoble.com/w/the-martian-andy-weir/1114993828';
    $book->description = 'The Martian is a 2011 science fiction novel written by Andy Weir. It was his debut novel under his own name. It was originally self-published in 2011; Crown Publishing purchased the rights and re-released it in 2014. The story follows an American astronaut, Mark Watney, as he becomes stranded alone on Mars in the year 2035 and must improvise in order to survive.';
    $book->save();

    # Or, pull in the data from our books.json file to add a bunch of books
    $bookData = file_get_contents(database_path('books.json'));
    $books = json_decode($bookData, true);
    
    $count = count($books);
    foreach ($books as $slug => $bookData) {
        $book = new Book();

        $book->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $book->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
        $book->slug = $slug;
        $book->title = $bookData['title'];
        $book->author = $bookData['author'];
        $book->published_year = $bookData['published_year'];
        $book->cover_url = $bookData['cover_url'];
        $book->info_url = $bookData['info_url'];
        $book->purchase_url = $bookData['purchase_url'];
        $book->description = $bookData['description'];

        $book->save();
        $count--; //maybe remove this to match professor's??
    }

    $faker = Faker\Factory::create();

for ($i = 0; $i < 5; $i++) {
    $book = new Book();

    $title = $faker->words(rand(3, 6), true);
    $book->title = Str::title($title);
    $book->slug = Str::slug($title, '-');
    $book->author = $faker->firstName . ' ' . $faker->lastName;
    $book->published_year = $faker->year;
    $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/cover-placeholder.png';
    $book->info_url = 'https://en.wikipedia.org/wiki/' . $slug;
    $book->purchase_url = 'https://www.barnesandnoble.com/' . $slug;
    $book->description = $faker->paragraphs(1, true);

    $book->save();
    }
  }
}
