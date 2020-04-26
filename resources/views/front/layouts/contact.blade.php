<div id="_CxT">
    <div class="__s">
        <div id="back">
            <a href="{{ route('index') }}"><i class="material-icons">arrow_back</i><span>Back</span></a>
        </div>
        <div class="_h_">
            <h1>Wanna say hello ?</h1>
        </div>

        <div class="_">
        {{ Form::open(['url' => route('contact.store')]) }}
        
            <div class="_f tp">
                <label for="topic" class="topic-label">What are you inquiring about?</label>
                {{ Form::select('topic_id', $topic, 1, array('id' => 'topic', 'class' => 'topic fi')) }}
                @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="_f">
                <label for="name"><i class="material-icons">person_outline</i><span>Name</span></label>
                <input id="name" type="text" class="fi @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="_f">
                <label for="email"><i class="material-icons">mail_outline</i><span>Email address</span></label>
                <input id="email" type="email" class="fi @error('email') is-invalid @enderror" name="email" value={{ old('email') }}>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="spinner-validate" data-has-validate="false">
                    <i class="material-icons"></i>
                </span>
            </div>

            <div class="_f">
                <label for="message"><i class="material-icons">chat_bubble_outline</i><span>Write a message here..</span></label>
                <textarea id="message" class="fi @error('message') is-invalid @enderror" name="message" maxlength="500" minlength="5">{{ old('message') }}</textarea>
                @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="_f">
                <button id="submit" type="submit" class="btn xa">Send Message<i class="material-icons">arrow_forward</i></button>
            </div>

        {{ Form::close() }}
        </div>
    </div>
</div>