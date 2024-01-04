<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{ defPdfFonts('pdf_style.css') }}">
    <style>
        @font-face {
            font-family: 'Ubuntu';
            src: url({{ defPdfFonts("Ubuntu-Regular.ttf") }}) format("truetype");
            font-style: normal;
        }

        @font-face {
            font-family: 'UbuntuBold';
            src: url({{ defPdfFonts("Ubuntu-Bold.ttf") }}) format("truetype");
            font-style: normal;
        }
    </style>
</head>
<body>
<h1 class="Def_h1">{{$data['name']}}</h1>
<div class="faq_des_print">
    {!! ($data['des']) !!}
</div>
@if(count($data['more_photos']) > 0)
    <div class="faq_img_print">
        @foreach($data['more_photos'] as $photo)
            @if($loop->index < 1000)
                <p class="faq_des_print">{!! $photo['des_en'] !!}</p>
                <p class="faq_photo_p">
                    <img src="{!! getPhotoPath($photo['photo'],"faq_def") !!}">
                </p>
            @endif
        @endforeach
    </div>
@endif

</body>
</html>
