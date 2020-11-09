let animals = ["犬", "猫", "ライオン", "カバ"];

// 削除前: ['犬', '猫', 'ライオン', 'カバ']
// 削除後: ['犬', '猫', 'ライオン']
console.log("【pop確認】");
animals.pop();
for (let i = 0; i < animals.length; i++) {
  console.log(animals[i]);
}

// 削除前: ['犬', '猫', 'ライオン']
// 削除後: ['猫', 'ライオン']
console.log("【shift確認】");
animals.shift();
for (let i = 0; i < animals.length; i++) {
  console.log(animals[i]);
}

// 追加前: ['猫', 'ライオン']
// 追加後: ['猫', 'ライオン', 'キリン']
console.log("【push確認】");
animals.push("キリン");
for (let i = 0; i < animals.length; i++) {
  console.log(animals[i]);
}

// 追加前: ['猫', 'ライオン', 'キリン']
// 追加後: ['トラ', '象', '猫', 'ライオン', 'キリン']
console.log("【unshift確認】");
animals.unshift("トラ", "象");
for (let i = 0; i < animals.length; i++) {
  console.log(animals[i]);
}

// 追加前: ['猫', 'ライオン', 'キリン']
// 追加後: ['トラ', '象', '猫', 'ライオン', 'キリン']
cars = ["プリウス", "セレナ"];
console.log("【concat確認】");
new_animals = animals.concat(cars);
for (let i = 0; i < new_animals.length; i++) {
  console.log(new_animals[i]);
}