<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    // attributes id, name , password, city, email, 
    // attributes phone, icon, created at, updated at

    /** 
     * id - GET & SET
    */
    public function getId() {
        return $this->attributes['id'];
    }
    public function setId($id) {
        $this->attributes['id'] = $id;
    }
    
    /** 
     * name - GET & SET
    */
    public function getName() {
        return $this->attributes['name'];
    }
    public function setName($name) {
        $this->attributes['name'] = $name;
    }
    
    /** 
     * password - GET & SET
    */
    public function getPassword() {
        return $this->attributes['password'];
    }
    public function setPassword($password) {
        $this->attributes['password'] = $password;
    }
    
    /** 
     * city - GET & SET
    */
    public function getCity() {
        return $this->attributes['city'];
    }
    public function setCity($city) {
        $this->attributes['city'] = $city;
    }
    
    /** 
     * email - GET & SET
    */
    public function getEmail() {
        return $this->attributes['email'];
    }
    public function setEmail($email) {
        $this->attributes['email'] = $email;
    }
    
    /** 
     * phone - GET & SET
    */
    public function getPhone() {
        return $this->attributes['phone'];
    }
    public function setPhone($phone) {
        $this->attributes['phone'] = $phone;
    }

    /** 
     * icon - GET & SET
    */
    public function getIcon() {
        return $this->attributes['icon'];
    }
    public function setIcon($icon) {
        $this->attributes['icon'] = $icon;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'city', 'icon', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
