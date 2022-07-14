@extends ('layout.main')

@section ('content')

    <div class="mt-3 text-center">
        <h1>Add Menu</h1>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-6">
            <a href="/menu" class="btn btn-secondary btn-sm mb-3" title="back">Back</a>
            <div class="card card-body">
                <form action="/menu" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-floating mb-3">
                        <input value="{{ old('nameMenu') }}" required name="nameMenu" type="text" required placeholder="Name" class="form-control" id="floatingInput"> 
                            <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" required value="{{ old('descMenu') }}" name="descMenu" required placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Menu Photo</label> 
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input name="photoMenu" class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ old('price') }}" name="price" type="number" placeholder="Name" class="form-control" id="floatingInput"> 
                        <label for="floatingInput">Price</label>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-primary btn-sm rounded me-1" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // preview image 
        function previewImage() {
            const image = document.querySelector("#image"); 
            const imgPreview = document.querySelector(".img-preview");

            imgPreview.style.display= "block";
            
            const oFReader = new FileReader(); 
            oFReader.readAsDataURL (image.files[0]);

            oFReader.onload = function(oFEvent) { 
                imgPreview.src = oFEvent.target.result;
            }
        }
    </script>
@endsection