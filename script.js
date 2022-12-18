function show_hide_password(target){
    var input = document.getElementById('chouse');
    if (input.getAttribute('type') == 'display:none') {
    target.classList.add('view');
    input.setAttribute('type', 'text');
} else {
    target.classList.remove('view');
    input.setAttribute('type', 'chouse');
}
    return false;
}