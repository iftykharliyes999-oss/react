import React, { useEffect, useState } from 'react';
import axios from 'axios';

export default function DisplayData() {
    const [data, setData] = useState([]);

    useEffect(() => {
        axios.get('https://jsonplaceholder.typicode.com/posts')
            .then(res => setData(res.data));
    }, []);
    return (
        <>

            <div>DISPLAY DATA</div>
            <div>
                {data.map((item) => (
                    <div key={item.id}>
                        <p>{item.title}</p>
                        <p>{item.body}</p>
                    </div>
                ))}
            </div>

        </>
    )
}
