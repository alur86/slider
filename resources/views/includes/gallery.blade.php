
@include ('includes.bootstraps')  

<script type="text/javascript">
  $('.mycarousel').carousel({
  interval: 200
})
</script>

<style> .center { text-align:center; } </style>

<div id="mycarousel" class="carousel slide" style="width: 800px; margin: 0 auto" data-ride="carousel">

<ol class="carousel-indicators">
@foreach( $carusels as $cl )
<li data-target="#mycarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
@endforeach
</ol>

 
<div class="carousel-inner" role="listbox">
@foreach( $carusels as $cl )
<div class="item {{ $loop->first ? ' active' : '' }}" >
<img src="/uploads/{{ $cl->image }}" alt="{{ $cl->title }}">
</div>
<div class="carousel-caption">
<h3>Web:<a href="{{ $cl->url }}" class="stretched-link">{{ $cl->url }}</a></h3>
</div>
@endforeach
</div>

<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
</span>
<span class="sr-only">Back</span>
</a>
<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Forward</span>
                </a>
 </div>
