document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault();
    let selected = document.getElementsByName("team_individual");
    let selectedOption;
    selected.forEach(choice => {
        if(choice.checked){
            selectedOption = choice.getAttribute("value");
        }
    });
    if (selectedOption === 'team') {
        window.location.href="http://127.0.0.1:8000/team";
    }
    else{
        window.location.href="http://127.0.0.1:8000/individual";
    }
});
