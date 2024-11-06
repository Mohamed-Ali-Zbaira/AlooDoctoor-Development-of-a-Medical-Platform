class clinique extends Model
{
use HasFactory;
protected $fillable = [
'nom',
'user_id',
'ville',
'email'
'numero_telephone'
'localisation_link'
'image',

'description',




];
public function user()
{
return $this->belongsTo(User::class);
}
}F