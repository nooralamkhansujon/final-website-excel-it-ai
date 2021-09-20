export default function form(form){
    const formData = new FormData();

    for(let column in form){
        if(column !== 'password'){
            formData.append(column,form[column])
        }
    }
    return formData;
}
