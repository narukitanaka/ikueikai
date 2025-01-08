document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("scholarship-search");
  const categoryInputs = form.querySelectorAll(
    'input[name="scholarship_category"]'
  );

  form.addEventListener("submit", function (e) {
    let categorySelected = false;

    // カテゴリーの選択確認
    categoryInputs.forEach((input) => {
      if (input.checked) {
        categorySelected = true;
      }
    });

    if (!categorySelected) {
      e.preventDefault();
      alert("カテゴリーを選択してください。");
    }
  });
});
