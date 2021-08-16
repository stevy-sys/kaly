import React from 'react'
import ReactDOM from 'react-dom'





const Ingredient = () => {
    const affiche = (e) => {
        console.log("ok")
    }

    return (
        <>
            <div>
                <button type="button" onClick={affiche}>test</button>
            </div>
        </>
    )
}

export default Ingredient

if (document.getElementById('rece')) {
    ReactDOM.render(<Ingredient />, document.getElementById('rece'))
}