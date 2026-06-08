import React from 'react'
import Header from '../components/Header'
import { Nav } from 'react-bootstrap'
import Footer from '../components/Footer'

export default function Props() {

    const person = { name: "Rahim", age: 20, address: "mirpur" }
    const { name, age } = person;
    return (
        <>

            <Nav />
            <h2>THIS IS ALL ABOUT PROPS</h2>
            <p>
                Name:{person.name} <br />
                Age:{person.age} <br />
                Address:{person.address}  <br />


            </p>
            <h3>DISTRUCTURING OUTPUT</h3>
            <p> 
                Name:{name} <br />
                Age:{age} <br />
            </p>



        </>
    )
}
