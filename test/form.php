$ v  =  nou  Valitron \ Validator ( $ _POST );
$ v -> rules = [
'necesar' => ['name', 'e-mail', 'password', 'confirm-password],
'string' => 'namee',
'min' => [['name', 3]],
'max' => [['name', 15]],
'email' => 'e-mail'
'string' => 'phone'
'integer' => 'age',
'min' => [['age', 1]],
'max' => [['age', 100]],
'string' => 'password',
'min' => [['password', 10]],
'max' => [['password', 20]],
'string' => 'confirm-password',
'min' => [['confirm-password, 10]],
'max' => [['confirm-password, 20]],
'date' => 'date-of-birth'
];

if ( $ v -> validate ()) {
echo " Succes! " ; } else { // Erori de imprimare_r ( $ v

-> erori ());
}