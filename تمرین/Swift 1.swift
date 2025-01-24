import Foundation


func factorial(of number: Int) -> Int {
    guard number >= 0 else { return 0 }
    return (1...number).reduce(1, *)
}


let number = 5
let result = factorial(of: number)
print("فاکتوریل از \(number) است \(result)")
