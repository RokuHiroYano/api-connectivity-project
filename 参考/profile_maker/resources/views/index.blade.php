<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>スキルシートメーカー</title>
  </head>
  <body>
    <div class="container wrap">
      <div class="mb-5">
        <h1>スキルシートメーカー</h1>
      </div>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">名前</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="name-furigana" class="form-label">フリガナ（名前）</label>
          <input type="text" class="form-control" id="name-furigana">
        </div>
        <div class="mb-3">
          <div>
            <label class="form-label">性別</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderMen" value="男">
            <label class="form-check-label" for="genderMen">男</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderWoman" value="女">
            <label class="form-check-label" for="genderWoman">女</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderOther" value="その他">
            <label class="form-check-label" for="genderOther">その他</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">年齢</label>
          <input type="number" class="form-control" id="age">
        </div>
        <div class="mb-3">
          <label for="route" class="form-label">沿線</label>
          <input type="text" class="form-control" id="route">
        </div>
        <div class="mb-5">
          <label for="near-station" class="form-label">最寄駅</label>
          <input type="text" class="form-control" id="near-station">
        </div>
        <div class="mb-4">
          <div class="mb-2">
            <label class="form-label">資格・経験１</label>
          </div>
          <label for="license-year-1" class="form-label">年月</label>
          <input type="month" class="form-control" id="license-year-1">
          <label for="license-name-1" class="form-label">名称</label>
          <input type="text" class="form-control" id="license-name-1">
        </div>
        <div class="mb-4">
          <div class="mb-2">
            <label class="form-label">資格・経験２</label>
          </div>
          <label for="license-year-2" class="form-label">年月</label>
          <input type="month" class="form-control" id="license-year-2">
          <label for="license-name-2" class="form-label">名称</label>
          <input type="text" class="form-control" id="license-name-2">
        </div>
        <div class="mb-5">
          <div class="mb-2">
            <label class="form-label">資格・経験３</label>
          </div>
          <label for="license-year-3" class="form-label">年月</label>
          <input type="month" class="form-control" id="license-year-3">
          <label for="license-name-3" class="form-label">名称</label>
          <input type="text" class="form-control" id="license-name-3">
        </div>
        <div class="mb-3">
          <label for="knowledge" class="form-label">経験・知識</label>
          <textarea class="form-control" id="knowledge" rows="10"></textarea>
        </div>
        <div class="mb-5">
          <label for="pr" class="form-label">自己PR</label>
          <textarea class="form-control" id="pr" rows="10"></textarea>
        </div>
        <div id="histories">
          <div class="historyBlock mb-4">
            <div class="mb-2">
              <label class="title form-label">資格・経験 1</label>
              <button type="button" class="btn btn-outline-danger remove">−</button>
            </div>
            <label class="form-label">年月</label>
            <input type="month" class="form-control year">
            <label class="form-label">業種/職種</label>
            <input type="text" class="form-control kind">
            <label class="form-label">業務内容</label>
            <input type="text" class="form-control value">
            <label class="form-label">ツール類</label>
            <input type="text" class="form-control tips">
          </div>
        </div>
        <div class="mb-5">
          <button id="plus" type="button" class="btn btn-primary">＋</button>
        </div>
        <button type="button" id="btn" class="btn btn-outline-primary">履歴書を作成する</button>
      </form>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- js -->
    <script type="text/javascript">
      // 「履歴書を作成する」ボタン押下時の処理
      // --tips: 本体であれば setItemはforで回した方がスマート。サンプルでは複雑性を持たせないようベタ書きとする
      $(() => {
        // 経歴フォームを増やすメソッド
        const max = 6;
        const min = 1;
        $('#plus').on('click', function(){
          const count = $('#histories .historyBlock').length;
          if (count < max){
            let element = $('#histories .historyBlock:last-child').clone(true);
            let title = element[0].querySelector('.title');
            title.textContent = `${title.textContent.slice( 0, -2 )} ${count + 1}`;
            let year = element[0].querySelector('.year');
            year.value = '';
            let kind = element[0].querySelector('.kind');
            kind.value = '';
            let value = element[0].querySelector('.value');
            value.value = '';
            let tips = element[0].querySelector('.tips');
            tips.value = '';
            $('#histories .historyBlock').parent().append(element);
          }
        });

        // 経歴フォームを減らすメソッド
        $('.remove').on('click', function(){
          var count = $('#histories .historyBlock').length;
          if (count > min){
            $(this).closest('.historyBlock').remove();
          }
        });

        const btn = document.getElementById('btn');
        let path = location.pathname.split('/');
        path.pop();
        btn.addEventListener('click', function() {
          window.location.href = `${path.join("/")}/profile`;
        })
      })
    </script>
  </body>
</html>