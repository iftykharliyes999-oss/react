import React, { useState, useEffect } from 'react';
import axios from 'axios';

export default function UserList() {
    const [users, setUsers] = useState([]);
    useEffect (() =>{
        
     axios.post("http://localhost/REACT/app2/api/user_list.php")
      .then(res=> {setUsers(res.data)});

    }, [])

      console.log(users);

    return (
        <div>
            <h2>User List</h2>

            <div>
                {users.map((users) => (
                    <div key={users.id}>
                        <p>name:{users.name}</p>
                        <p>gender:{users.gender}</p>
                        <p>address:{users.address}</p>
                        <p>district:{users.district}</p>
                    </div>
                ))}
            </div>

           
        </div>
    );
}