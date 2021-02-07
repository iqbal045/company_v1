@extends('admin.layouts.admin')

@section('title')
    About Edit
@endsection

@section('style')
@endsection

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="block">
        <div class="title">
            <strong><h4 class="float-left">About Info Edit</h4></strong>
            <span class="d-block"></span>
        </div>
        <div class="block-body">
            <form action="{{  route('abouts.update', $about->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="form-control-label">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        value="{{ isset($about->title) ? @$about->title : old('title')}}"
                    >
                    @error('title')
                        <span class="help-block m-b-none text-danger">
                            {{ @$message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Sub-Title</label>
                    <input
                        type="text"
                        class="form-control"
                        name="subtitle"
                        value="{{ isset($about->subtitle) ? @$about->subtitle : old('subtitle')}}"
                    >
                    @error('subtitle')
                        <span class="help-block m-b-none text-danger">
                            {{ @$message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Description</label>
                    <textarea
                        type="text"
                        class="form-control"
                        name="desc"
                    >{{ isset($about->desc) ? @$about->desc : old('desc')}}</textarea>
                    @error('desc')
                        <span class="help-block m-b-none text-danger">
                            {{ @$message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">About Images</label>
                    <input id="about_images"
                        type="file"
                        class="form-control-file"
                        name="about_images[]"
                        multiple
                    >
                    <small class="form-text text-muted">You can upload multiple Image</small>
                    @error('about_images[]')
                        <span class="help-block m-b-none text-danger">
                            {{ @$message }}
                        </span>
                    @enderror
                </div>
                <!--// only edit-->
                @if( isset($about) && @$about->images->count() > 0)
                    <div class="row">
                        @foreach(@$about->images as $image)
                            <div class="col-3" id="removeAboutImageSection">
                                <div class="input-group">
                                    <img class="d-block" width="100%" height="150px"
                                        src="{{ @$image->url }}"
                                        alt="{{ @$image->type }}">
                                    <button onclick="removeAboutImage(event, this, '{{ @$image->id }}')"
                                        class="btn btn-danger btn-block">Remove
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="form-group mt-3">
                    <a href="{{ route('abouts.index') }}" class="btn btn-danger" type="submit">Cancel</a>
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
<script>
    // delete product image
    function removeAboutImage(e, el, image_id) {
        e.preventDefault()
        if (image_id && confirm('Are you sure to delete this item')) {
            $.get('{{ route('remove.abouts.image') }}', {image_id: image_id}, (res) => {
                if (res.success) {
                    $(el).parents('#removeAboutImageSection').remove();
                    toastr.success(`${res.message}`);
                }
            })
        }
    }
</script>
@endsection
