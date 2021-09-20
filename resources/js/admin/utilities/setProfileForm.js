export default function setProfileForm(form,data){
    for(let column in data){
        if(form.hasOwnProperty(column) && column !== 'password'){
            form[column] = data[column]
        }
    }
}
