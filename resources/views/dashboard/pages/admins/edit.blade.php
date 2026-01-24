
@extends("dashboard.layout.main")


@section("body")

    <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Edit Admin</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{ route("admin.update" , $admin->id) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method("put")

                    @error("name")
                      <div class="alert alert-danger text-capitalize">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input value="{{ $admin->name }}" type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                    </div>

                     @error("email")
                      <div class="alert alert-danger text-capitalize">{{ $message }}</div>
                    @enderror


                    <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input value="{{ $admin->email }}" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                    </div>



                     @error("gender")
                      <div class="alert alert-danger text-capitalize">{{ $message }}</div>
                    @enderror


                    <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" name="gender" id="exampleSelectGender">
                        <option value="male" @selected($admin->gender == "male")>Male</option>
                        <option value="female" @selected($admin->gender == "female")>Female</option>
                    </select>
                    </div>


                     @error("img")
                      <div class="alert alert-danger text-capitalize">{{ $message }}</div>
                    @enderror


                    <div class="form-group">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="" alt="معاينة الصورة" class="img-thumbnail mx-auto mb-3 d-none" id="adminImagePreview" width="170" height="170">
                                <div id="adminImagePlaceholder" class="text-muted">
                                    <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-light text-primary mb-2" style="width:72px;height:72px;">
                                        <i class="fas fa-image fa-2x"></i>
                                    </span>
                                    <p class="mb-0">Upload Image (.png or .jpg)</p>
                                </div>
                                <div class="custom-file mt-3 text-left">
                                    <input  type="file" class="custom-file-input" id="adminImageInput" name="img" accept="image/*">
                                    <label class="custom-file-label" for="adminImageInput">Upload Image...</label>
                                </div>
                                <button type="button" class="btn btn-outline-secondary btn-sm mt-3 d-none" id="adminImageReset">
                                   Delete Image
                                </button>
                            </div>
                        </div>
                    </div>


                     @error("phone")
                      <div class="alert alert-danger text-capitalize">{{ $message }}</div>
                    @enderror


                    <div class="form-group">
                    <label for="exampleInputPhone">Phone</label>
                    <input value="{{ $admin->phone }}" type="text" class="form-control" id="exampleInputPhone" placeholder="Phone" name="phone">
                    </div>





                    <button type="submit" class="btn btn-primary me-2">Edit</button>
                    <a href="{{ route("admin.index") }}" class="btn btn-light">Cancel</a>
                </form>
                </div>
            </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var imageInput = document.getElementById("adminImageInput");

            if (!imageInput) {
                return;
            }

            var preview = document.getElementById("adminImagePreview");
            var placeholder = document.getElementById("adminImagePlaceholder");
            var resetButton = document.getElementById("adminImageReset");
            var fileLabel = document.querySelector('label[for="adminImageInput"]');

            var resetPreview = function () {
                imageInput.value = "";

                if (preview) {
                    preview.src = "";
                    preview.classList.add("d-none");
                }

                if (placeholder) {
                    placeholder.classList.remove("d-none");
                }

                if (resetButton) {
                    resetButton.classList.add("d-none");
                }

                if (fileLabel) {
                    fileLabel.textContent = "اختر صورة...";
                }
            };

            var showPreview = function (file) {
                if (!file || !file.type.startsWith("image/")) {
                    resetPreview();
                    return;
                }

                var reader = new FileReader();

                reader.onload = function (event) {
                    if (preview) {
                        preview.src = event.target.result;
                        preview.classList.remove("d-none");
                    }

                    if (placeholder) {
                        placeholder.classList.add("d-none");
                    }

                    if (resetButton) {
                        resetButton.classList.remove("d-none");
                    }
                };

                reader.readAsDataURL(file);
            };

            imageInput.addEventListener("change", function () {
                var file = imageInput.files.length ? imageInput.files[0] : null;

                if (fileLabel) {
                    fileLabel.textContent = file ? file.name : "Upload Image...";
                }

                if (file) {
                    showPreview(file);
                } else {
                    resetPreview();
                }
            });

            if (resetButton) {
                resetButton.addEventListener("click", function (event) {
                    event.preventDefault();
                    resetPreview();
                });
            }
        });
    </script>

@endsection

