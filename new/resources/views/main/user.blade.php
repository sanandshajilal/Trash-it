<!-- User Section -->
<!-- Attention!! used some inline styles!! Din't want mess your css -->
<section id="user" class="user-section" style="min-height:500px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>User Section</h1>
                <h1>User name: {{$user->fname}} {{$user->lname}} </h1>
                <a href="{{url('auth/logout')}}" class="btn btn-default">Log out</a>
            </div>
        </div>
    </div>
</section>
