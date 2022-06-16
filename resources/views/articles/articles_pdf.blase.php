<!DOCTYPE html> 
<html> 
<head> 
 <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title> 
</head> 
<body> 
 <style type="text/css"> 
 table tr td, 
 table tr th{ 
 font-size: 9pt; 
 } 
 </style> 
 <center> 
 <h5>Laporan Artikel</h4> 
 </center> 
 
 <table class='table table-bordered' style="width:95%;margin: 
0 auto;"> 
 <thead> 
 <tr> 
 <th>Judul</th> 
 <th>Isi</th> 
 <th>Gambar</th> 
 </tr> 
 </thead> 
 <tbody> 
 @foreach($articles as $a) 
 <tr> 
 <td>{{ $a->title }}</td> 
 <td>{{ $a->content }}</td> 
 <td><img width="100px" src="{{ 
storage_path('app/public/'.$a->featured_image) }}"></td> 
 </tr> 
 @endforeach 
 </tbody> 
 </table> 
 
</body> 
</html>