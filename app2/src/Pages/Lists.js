import React from 'react'

export default function Lists() {

        const cars = ["AUDI","BMW","TOYOTA","MARCEDES"];

  return (
    <> 
            <div>ALL LIST ITEAM</div>
            <ul> 
                {cars.map(
                    (car)=> <li>{car}</li> )
                }
            </ul>
    
    </>
  )
}
