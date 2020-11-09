let member = 3;
let price = 1000;

function totalPrice(member, price) {
  let total = member * price;
  return total;
  // 下記のように1行にしてもよい
  // return member * price;
}

// totalPrice関数を呼ぶ
// 計算された結果が返ってくるので、返ってきた値を出力
console.log(`合計金額は${totalPrice(member, price)}円です`);