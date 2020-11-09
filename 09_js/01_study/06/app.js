let member = 3;
let price = 1000;

// totalという変数に関数を代入します
let total = function (member, price) {
  return member * price;
};

// totalをここで呼びます
console.log(`合計金額は${total(member, price)}円です`);