let member = 3;
let price = 1000;

function totalPrice(member, price) {
  let total = member * price;
  return total;
}

// 1度目
console.log(`合計金額は${totalPrice(member, price)}円です`);

let member2 = 4;
let price2 = 2000;
// 2度目
console.log(`合計金額は${totalPrice(member2, price2)}円です`);