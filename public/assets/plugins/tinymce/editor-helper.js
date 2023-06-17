function default_editor(selector) {
  tinymce.init({
    selector: selector,
    height: 450,
    formats: {
      h1: {
        block: "h1",
        classes: "heading1",
      },
      h2: {
        block: "h2",
        classes: "heading2",
      },
      h3: {
        block: "h3",
        classes: "heading3",
      },
      h4: {
        block: "h4",
        classes: "heading4",
      },
      h5: {
        block: "h5",
        classes: "heading5",
      },
    },
  });
}

function small_editor(selector, height = 250) {
  tinymce.init({
    menubar: false,
    branding: false,
    selector: selector,
    height: height,
    plugins: ["wordcount lists link code importcss hr image imagetools"],
    toolbar:
      "formatselect | bold italic underline  | removeformat | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent| image | hr  code ",
   
    relative_urls: false,
    automatic_uploads: false,
    images_reuse_filename: true,
    file_picker_types: "image",
    image_title: true,
    image_description: false,
    image_dimensions: false,
    image_class_list: [
      { title: "Img-Fluid", value: "img-fluid" },
      { title: "img-Responsive", value: "img-responsive" },
      { title: "img-Rounded", value: "img-rounded" },
      { title: "img-Circle", value: "img-circle" },
      { title: "img-Thumbnail", value: "img-thumbnail" },
    ],
    images_upload_handler: function (blobInfo, success, failure) {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "/ajax/image-upload");
      xhr.setRequestHeader(
        "X-CSRF-TOKEN",
        $('meta[name="csrf-token"]').attr("content")
      ); // manually set header
      xhr.onload = function () {
        if (xhr.status !== 200) {
          failure("HTTP Error: " + xhr.status);
          return;
        }
        var json = JSON.parse(xhr.responseText);
        if (!json || typeof json.location !== "string") {
          failure("Invalid JSON: " + xhr.responseText);
          return;
        }
        success(json.location);
      };
      var formData = new FormData();
      formData.append("file", blobInfo.blob(), blobInfo.filename());
      xhr.send(formData);
    },

    // font_formats:
    //    "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; SotonyMJ=SotonyMJ; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
    // content_style: "body { font-family: SotonyMJ; }",
    // content_css: "/assets/backend/plugins/tinymce/custom-fonts/sotonyMJ.css"
  });
}

function simple_editor(selector, height = 400) {
  var editor_config = {
    path_absolute: "/",
    menubar: false,
    branding: false,
    selector: selector,
    height: height,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality toc",
      "template emoticons spellchecker paste textcolor colorpicker textpattern imagetools",
    ],
    toolbar1:
      "undo redo | styleselect | forecolor backcolor  | cut copy removeformat | table toc | unlink link image media ",
    toolbar2:
      "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent  hr | insertdatetime | code fullscreen ",

    relative_urls: false,
    automatic_uploads: false,
    images_reuse_filename: true,
    file_picker_types: "image",
    image_title: true,
    image_description: false,
    image_dimensions: false,
    image_class_list: [
      { title: "Img-Fluid", value: "img-fluid" },
      { title: "img-Responsive", value: "img-responsive" },
      { title: "img-Rounded", value: "img-rounded" },
      { title: "img-Circle", value: "img-circle" },
      { title: "img-Thumbnail", value: "img-thumbnail" },
    ],
    images_upload_handler: function (blobInfo, success, failure) {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "/admin/editor/image-upload");
      xhr.setRequestHeader(
        "X-CSRF-TOKEN",
        $('meta[name="csrf-token"]').attr("content")
      ); // manually set header
      xhr.onload = function () {
        if (xhr.status !== 200) {
          failure("HTTP Error: " + xhr.status);
          return;
        }
        var json = JSON.parse(xhr.responseText);
        if (!json || typeof json.location !== "string") {
          failure("Invalid JSON: " + xhr.responseText);
          return;
        }
        success(json.location);
      };
      var formData = new FormData();
      formData.append("file", blobInfo.blob(), blobInfo.filename());
      xhr.send(formData);
    },
  };
  tinymce.init(editor_config);
}

function medium_editor(selector, height = 300) {
  tinymce.init({
    menubar: false,
    branding: false,
    selector: selector,
    height: height,
    theme: "silver",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "template textpattern imagetools",
    ],
    toolbar1:
      "styleselect | blockquote forecolor backcolor | undo redo | cut copy removeformat | table | unlink link image media template codesample inserttable | print preview code fullscreen",
    toolbar2:
      "bold italic underline superscript subscript | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime",
    image_advtab: true,
    templates: [
      {
        title: "Test template 1",
        content: "Test 1",
      },
      {
        title: "Test template 2",
        content: "Test 2",
      },
    ],
  });
}

function full_editor(selector) {
  tinymce.init({
    selector: selector,
    height: 500,
    plugins:
      "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
    toolbar1:
      "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
    image_advtab: true,
    templates: [
      {
        title: "Test template 1",
        content: "Test 1",
      },
      {
        title: "Test template 2",
        content: "Test 2",
      },
    ],
    content_css: [
      "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
      "//www.tinymce.com/css/codepen.min.css",
    ],
  });
}

$(document).on("click", "#customFile", function (event) {
  event.preventDefault();
  let mediaPath = $("#thumb_directory").val();
  if (mediaPath) {
    window.open(
      "/file-manager/fm-button?leftDisk=public&leftPath=" + mediaPath,
      "fm",
      "width=800,height=500"
    );
  } else {
    alert("Post title must not empty");
  }
});

$(document).on("click", ".add-attachment", function () {
  let divArea = $(".attachment-form");
  let formGroup = divArea.find(".single-form").last().find(".form-group");
  var newForm = "";
  formGroup.each(function () {
    var data = $(this).html();
    let name = $(this).find(".form-control").attr("name");
    var newData;
    if (name) {
      let current = parseInt(name.slice(6, 7));
      let newIndex = current + 1;
      newData = data.replace(
        "attch[" + current + "]",
        "attch[" + newIndex + "]"
      );
    } else {
      newData = data;
    }
    newForm += '<div class="' + $(this).attr("class") + '">';
    newForm += newData;
    newForm += "</div>";
  });
  newForm = '<div class="single-form row">' + newForm + "</div>";
  divArea.append(newForm);
  divArea
    .find(".single-form")
    .last()
    .find(".disabled")
    .addClass("remove-attachment")
    .removeClass("disabled");
});

$(document).on("change", ".attch-path", function () {
  if ($(this).val() === "internal") {
    $(this)
      .closest(".single-form")
      .find(".attch-value")
      .attr("readonly", "")
      .addClass("enableInternal");
  } else if ($(this).val() === "external") {
    $(this)
      .closest(".single-form")
      .find(".attch-value")
      .removeAttr("readonly")
      .removeClass("enableInternal");
  }
});

$(document).on("click", ".enableInternal", function (event) {
  event.preventDefault();
  let mediaPath = $("#thumb_directory").val();
  if (mediaPath) {
    window.open(
      "/file-manager/fm-button?leftDisk=public&leftPath=" + mediaPath,
      "fm",
      "width=800,height=500"
    );
    inputId = $(this);
  } else {
    alert("Post title must not empty");
  }
});

$(document).on("click", ".remove-attachment", function () {
  $(this).closest(".single-form").remove();
});

let inputId = "";

function fmSetLink($url) {
  if (inputId) {
    inputId.val($url);
  } else {
    $("#thumbnail").attr("value", $url);
    $("#holder").attr("src", $url);
  }
}

function ajax_slug_url(title) {
  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    type: "POST",
    url: "/admin/get-slug-from-title",
    data: {
      title: title,
    },
    success: function (data) {
      $("#post_slug").val(data);
    },
  });
}

function readImageURL(input, preview) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      preview.attr("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}
