
struct Point {
    x: u8,
    y: u8,
}

fn distance(p1: Point, p2: Point) -> f64 {
    let a_squared = (p2.x as f64 - p1.x as f64).exp2();
    let b_squared = (p2.y as f64 - p1.y as f64).exp2();

    (a_squared + b_squared).sqrt()
}

fn main() {

    let p1 = Point{x: 3, y: 4};
    let p2 = Point{x: 7, y: 9};

    println!("Distance is: {}", distance(p1, p2));
}
