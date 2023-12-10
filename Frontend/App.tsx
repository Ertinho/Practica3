import React, { useEffect, useState } from 'react';
import { 
  SafeAreaView,
  Pressable,
  View, 
  Text
} from 'react-native';


import axios from 'axios';
import {URL} from './src/helpers/index';
const endpoint = URL;


const App = () => {
  //const [profile, setProfile] = useState({});
  const [name, setName] = useState('');
  const [lastName, setLastName] = useState('');
  const [email, setEmail] = useState('');
  const [city, setCity] = useState('');
  const [country, setCountry] = useState('');
  const [frameworks , setFrameworks] = useState([]);
  const [hobbies , setHobbies] = useState([]);
  
  useEffect(() => {
    getProfile();
  }, []);

  const getProfile = async () => {
    const response = await axios
      .get(`${endpoint}profile`)
      .then(res => {
        //setProfile(res.data);
        setName(res.data.name);
        setLastName(res.data.lastname);
        setEmail(res.data.email);
        setCity(res.data.city);
        setCountry(res.data.country);
        setFrameworks(res.data.frameworks);
        setHobbies(res.data.hobbies);
      })
      .catch(error => console.log(error));
  };

  /*
  const updateProfile = () => {
    fetch(`${endpoint}updateProfile`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        // Your updated profile data here
      }),
    })
    .then(response => response.json())
    .then(data => setProfile(data))
    .catch(error => console.error(error));
  };
  */

  return (
    <SafeAreaView>
      <Text>¡Bienvenido/a !</Text>
      <Text>Nombre: {name}</Text>
      <Text>Apellido: {lastName}</Text>
      <Text>Correo electrónico: {email}</Text>
      <Text>Ciudad: {city}</Text>
      <Text>País: {country}</Text>

      <Text>Hobbies:</Text>
      <Text>
         {hobbies.map((hobby:{ name: string ; description: string } , index) => (
          <View key={index}>
            <Text>Nombre: {hobby.name}</Text>
            <Text>Descripción: {hobby.description}</Text>
          </View>
        ))}
      </Text>
      <Text>Frameworks:</Text>
      <Text>
         {frameworks.map((framework:{ name: string ; level: string ; year: string} , index) => (
          <View key={index}>
            <Text>Nombre: {framework.name}</Text>
            <Text>Nivel: {framework.level}</Text>
            <Text>Año: {framework.year}</Text>
          </View>
        ))}
      </Text>

    </SafeAreaView>
  );
};

export default App;