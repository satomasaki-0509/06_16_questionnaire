<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート</title>
</head>
<body>
  <form action="questionnaire_create.php" method="POST">
    <fieldset>
      <legend>個人情報</legend>
      <div>
        お名前： <input type="text" name="name">
        メール： <input type="text" name="mail">
      </div>
    </fieldset>
    <fieldset>
      <legend>ご感想</legend>
      <div>
        <input type="radio" name="manzokudo1">超満足！<br>
        <input type="radio" name="mannzokudo2">満足<br>
        <input type="radio" name="mannzokudo3">普通<br>
        <input type="radio" name="mannzokudo4">不満<br>
        <input type="radio" name="mannzokudo5">超不満<br><br>
        ご感想<br>
        <textarea rows="3" cols="20" name="kanso" ></textarea> 
      </div>
    </fieldset>
    <div>
        <button>submit</button>
    </div>
  </form>
</body>
</html>