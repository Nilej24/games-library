import { HashRouter, Routes, Route } from 'react-router-dom'

function App() {

  return (
    <>
      <HashRouter>
        <Routes>
          <Route path="/" element={<div>home page</div>} />

          <Route path="/pop the lock" element={<div>game page</div>} />

          <Route path="*" element={<div>404</div>} />
        </Routes>
      </HashRouter>
    </>
  )
}

export default App
