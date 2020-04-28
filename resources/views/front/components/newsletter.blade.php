<div id="_nRx9">
  <div class="_s">
    <div class="r">
      <h3>Subscribe our Newsletter!</h3>
      <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
    </div>
    {{ Form::open(['url' => route('newsletter.store') ]) }}
      <input type="text" name="email" placeholder="Your email">
      <button><span>Submit</span> <i class="material-icons">arrow_forward</i></button>
    {{ Form::close() }}
  </div>
</div>