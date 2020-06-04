@extends('layouts.template')

@section("template-content")
<br />
<h3>Create Review</h3>
<hr />
<link href="resources/css/quill.snow.css" rel="stylesheet">
<link href="resources/css/tagify.css" rel="stylesheet">
<link href="resources/css/jquery.Jcrop.min.css" rel="stylesheet">
<form class="article_form" id="article_form" enctype='multipart/form-data' action='/saveArticle' method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col form-gruop">
            <label for="review_title">Review Title</label>
            <input class="form-control" name="review_title" id="review_title" placeholder="An awesome review title!">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="review_image">Review Image</label>
            <input type="file" class="form-control form-control-file" id="review_image" name="review_image" accept="image/*">
        </div>
        <div class="col">
            <label>Image Preview</label><br />
            <img src="resources/img/80x80.png" id="preview" class="img-thumbnail">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label>How did you like the reviewed stuff?</label>
            <div class="review-stars-rating" style="font-size: 30px; color: orange;"></div>
            <input type="text" style="display: none;" name="review_stars" id="review_stars">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="review_tags">Tags</label>
            <input class="form-control" name="review_tags" id="review_tags">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label>Review</label>
            <div class="editor_full">
                <div id="document_full" class="ql-scroll-y" style="min-height: 300px;"></div>
            </div>
            <textarea name="review_article" id="review_article" style="display: none;"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col form-group" align="right">
            <a href="#" class="btn btn-md btn-secondary">Cancel</a>
            <input type="submit" class="btn btn-md btn-primary" value="Save Review">
        </div>
    </div>

</form>

<script src="resources/js/quill.js"></script>
<script src="resources/js/jQuery.tagify.min.js"></script>
<script src="resources/js/jquery.Jcrop.min.js"></script>
<script src="resources/js/rater.js" charset="utf-8"></script>
<script>
    /* TAGS JS */
    $("#review_tags").tagify();
</script>

<script>
    /* IMAGE PREVIEW JS */
    $('#review_image').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>

<script>
    var options = {
        max_value: 5,
        step_size: 0.5,
        selected_symbol_type: 'utf8_star',
        cursor: 'pointer',
        // selected_symbol_type: 'hearts',
        // url: 'http://localhost/test.php',
        initial_value: 0,
        update_input_field_name: $("#review_stars"),
    }
    $(".review-stars-rating").rate(options);

    $(".review-stars-rating").on("change", function(ev, data){
        console.log($(this).html());
        console.log(data.from);
    });
</script>

<script>
     /* RICH TEXT EDITOR JS */
    var toolbarOptions = [
            [{
            'header': [1, 2, 3, 4, 5, 6, false]
            }],
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            ['blockquote', 'code-block'],

            [{
            'header': 1
            }, {
            'header': 2
            }], // custom button values
            [{
            'list': 'ordered'
            }, {
            'list': 'bullet'
            }],
            [{
            'script': 'sub'
            }, {
            'script': 'super'
            }], // superscript/subscript
            [{
            'indent': '-1'
            }, {
            'indent': '+1'
            }], // outdent/indent
            [{
            'direction': 'rtl'
            }], // text direction

            [{
            'size': ['small', false, 'large', 'huge']
            }], // custom dropdown

            [{
            'color': []
            }, {
            'background': []
            }], // dropdown with defaults from theme
            [{
            'font': []
            }],
            [{
            'align': []
            }],
            ['link', 'image'],

            ['clean'] // remove formatting button
        ];
        
    var quillFull = new Quill('#document_full', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow',
    placeholder: "Write something..."
    });

    $("#article_form").on("submit",function(){
        $("#review_article").val(quillFull.container.firstChild.innerHTML);
    });
</script>
@endsection