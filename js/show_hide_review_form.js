function show_review_form(){
document.getElementById('review-form').style.display = 'block';
document.getElementById('review-button').setAttribute('onclick', 'hide_review_form()');
var orig = document.getElementById('review-button').innerHTML;
document.getElementById('review-button').setAttribute('data-orig', orig);
document.getElementById('review-button').innerHTML = 'Click to hide review form';
}

function hide_review_form(){
document.getElementById('review-form').style.display = 'none';
document.getElementById('review-button').setAttribute('onclick', 'show_review_form()');
var orig = document.getElementById('review-button').getAttribute('data-orig');
document.getElementById('review-button').innerHTML = orig;
}
