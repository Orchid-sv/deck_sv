var _cropper;
function start() {
  var image = document.getElementById('image');
  var imagetype = document.getElementById('imagetype');
    if(imagetype !== null ){
      _cropper = new Cropper(image,{
        viewMode:1,
        aspectRatio: 3 / 1,
        zoomable:false,
        minCropBoxWidth:200,
        minCropBoxHeight:100,
        background:false,
        
      });
    }else{
      _cropper = new Cropper(image,{
        viewMode:1,
        aspectRatio: 1 / 1,
        zoomable:false,
        minCropBoxWidth:80,
        minCropBoxHeight:80,
        background:false,
        
      });
    }
}
function loadLocalImage(e) {
 // ファイル情報を取得
  var fileData = e.target.files[0];
 // FileReaderオブジェクトを使ってファイル読み込み
  var reader = new FileReader();
  reader.onload = function() {
 // ブラウザ上に画像を表示する
  image = document.getElementById('image');
  image.src = reader.result;
//  var canvas = document.getElementById('canvas');
  if (image.complete) {
    start.call(image);
  } else {
    image.onload = start;
  }
}
// ファイル読み込みを実行
reader.readAsDataURL(fileData);
}

var file = document.getElementById('file');
file.addEventListener('change', this.loadLocalImage, false);
var imageContainer = document.getElementById('img-container');
imageContainer.addEventListener('click', function() {
// getDataは用意されたオプション
var cropperData = _cropper.getData();

var data = {
  x: Math.round(cropperData.x),
  y: Math.round(cropperData.y),
  width: Math.round(cropperData.width),
  height: Math.round(cropperData.height),
  vectorX: 1,
  vectorY: 1
};

document.getElementById("upload-image-x").value =data['x'];
document.getElementById("upload-image-y").value =data['y'];
document.getElementById("upload-image-w").value =data['width'];
document.getElementById("upload-image-h").value =data['height'];

// ↓プレビュー用
// var image = document.getElementById('image');
// var canvas = document.getElementById('canvas');
// canvas.getContext('2d').drawImage(
//  image,
//  data['x'],
//  data['y'],
//  data['width'],
//  data['height'],
//  0,0,
//  data['vectorX'] * 120,
//  data['vectorY'] * 120 
// );

}
);