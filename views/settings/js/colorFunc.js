function changeColour(value)
{
    var color = document.body.style.backgroundColor;
    switch(value)
    {
        case 'b':
            color = "#FF0000";
        break;
        case 'r':
            color = "#0000FF";
        break;
        case 'p':
            color = "#FF00FF";
        break;
    }
    document.body.style.backgroundColor = color;
}