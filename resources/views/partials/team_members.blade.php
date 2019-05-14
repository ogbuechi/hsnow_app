@foreach($teams as $team)
<!-- Single Team Member -->
<div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30 wow fadeInUp">
    <div class="tm-member">
        <div class="tm-member-top">
            <img src="{{ Voyager::image($team->photo) }}" alt="team member">

        </div>
        <div class="tm-member-bottom">
            <h5>{{ $team->name }}</h5>
            <p>{{ $team->position }}</p>
        </div>
    </div>
</div>
<!--// Single Team Member -->
    @endforeach
