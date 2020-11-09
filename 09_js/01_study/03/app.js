let animals = ["犬", "猫", "ライオン", "カバ"];

// animals.lengthで4が返ってくる
// iが0, 1, 2, 3の時だけ実行される
animals.forEach(function (value, index) {
  console.log("valueは" + value + "です。");
  console.log("indexは" + index + "です。");
});