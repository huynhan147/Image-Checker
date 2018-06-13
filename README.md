# Huy Phi / Image Checker

Dectect format Image

## Cài đặt : 
```$xslt
composer require huyphi/image_checker
```
## Usage

- Khởi tạo đối tượng với đầu vào là  path local đến file hoặc 1 đường link web, cũng có thể là source/resource.
```$xslt
use HuyPhi\ImageChecker\ImageChecker;
```

```
$image = new ImageChecker($path);
```


- Phát hiện format của file ảnh

```
$image->DetectImage()();

```
 
- Kiểm tra file ảnh có thuộc định dạng mong muốn không

```
$image->is_GIF();
$image->is_JPG();
$image->is_SWF();

``` 

## Note
Ch hỗ trợ một số định dạng phổ biến như JPG, PNG, BMP, SWF, GIF. 
