function change(){
    let color = prompt('Enter a color to change background color:')
    document.body.style.background = color
}

//translate//

function googleTranslateElementInit(){
    new google.translate.TranslateElement(
        {pageLanguage :'en',},
        'google_translate_element'
        
    );
}
