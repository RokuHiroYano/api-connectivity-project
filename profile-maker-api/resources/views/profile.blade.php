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
    <title>プレビュー</title>
  </head>
  <body class="profile-body">
    <section class="page">
			<table>
				<colgroup>
					<col style="width:2%;">
					<col style="width:9%;">
					<col style="width:12%;">
					<col style="width:17%;">
					<col style="width:15%;">
          <col style="width:15%;">
          <col style="width:10%;">
          <col style="width:20%;">
				</colgroup>
        <tbody>
          <tr class="profile-row">
            <td class="center" style="font-size:1.5rem; font-weight: bold;" colspan="8">スキルシート</td>
          </tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2">ふりがな</td>
            <td class="bd-t-s bd-l-s bd-r-s" colspan="2" id="name-furigana">{{$profile->name_furigana}}</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">性別</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="gender">{{$profile->gender}}</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">年齢</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="age">{{$profile->age}}</td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2">氏名</td>
            <td class="bd-t-s bd-l-s bd-r-s" colspan="2" id="name">{{$profile->name}}</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">路線</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="route">{{$profile->route}}</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">最寄駅</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="near-station">{{$profile->near_station}}</td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2" rowspan="4">資格</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">年月</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="5">名称</td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-1">{{$profile->license_year_1}}</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="license-name-1" colspan="5">{{$profile->license_name_1 }}</td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-2"></td>
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-2" colspan="5"></td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-3"></td>
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-3" colspan="5"></td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s center blue"colspan="2" rowspan="2">経験・知識</td>
            <td class="bd-t-s bd-l-s bd-r-s" colspan="6" rowspan="2" valign="top" id="knowledge">{{$profile->knowledge}}</td>
          </tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue" colspan="2" rowspan="2">自己PR</td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s" colspan="6" rowspan="2" valign="top" id="pr">{{$profile->pr}}</td>
          </tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s blue" style="font-size: 5px; padding: 0;">No.</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">年月</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">業種/職種</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="4">業務内容</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">ツール類</td>
          </tr>
          <tr class="profile-row history-row">
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue index" style="font-size: 5px; padding: 0;" rowspan="3">1</td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s year" rowspan="3"></td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s kind" rowspan="3"></td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s value" colspan="4" rowspan="3" valign="top"></td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s tips" rowspan="3" valign="top"></td>
          </tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row"></tr>
        </tbody>
      </table>
    </section>
  </body>
</html>