@extends('layouts.myapp')

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you want to say?</h3></header>
            <form action="" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="new-post" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
    <section class="row posts"> 
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say...</h3></header>
                <article class="post">
                    <p>nothing to say, please leave me alone !!</p>
                    <div class="info">
                        Posted by fa on 07 December 2019
                    </div>
                    <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> |
                    
                       
                    </div>
                </article>
                <article class="post">
                    <p>I have a lot to say, see you later !</p>
                    <div class="info">
                        Posted by tima on 24 November 2019
                    </div>
                    <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> |
                    
                       
                    </div>
                </article>
        </div>
    </section>

    

    
@endsection