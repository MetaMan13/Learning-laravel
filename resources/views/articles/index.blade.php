@extends ('layout')

@section ('content')

    <div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Articles</h2>
            </div>
            <ul class="style1">
			@forelse ($articles as $article)
				<li class="first">
					<!-- <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3> -->
					<h3><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></h3>
					<p>{{ $article->body }}</p>
				</li>
			@empty
				<p>No relevant articles yet</p>
			@endforelse
			</ul>
		</div>
	</div>
</div>

@endsection